<x-app-layout>
    @include('posts.partials.main-modal')
    @include('posts.partials.edit-modal')



    <h1 class="text-3xl font-bold mb-6">Posts</h1>

    <button class="btn btn-outline btn-primary" onclick="createPostModal.showModal()">
        Create Post
    </button>

    <div class="space-y-4">
        <!-- Create Post Section -->
        <div
            class="h-full w-full bg-primary rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-primary p-5">
            <div class="border border-primary rounded-lg p-3 cursor-pointer hover:bg-primary/10 transition"
                onclick="createPostModal.showModal()">
                <p class="text-lg font-semibold">What's on your mind, {{ Auth::user()->name }}?</p>
            </div>
        </div>

        <!-- Posts Section -->
        @foreach ($posts as $post)
            <div
                class="h-full w-full bg-primary rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-primary p-5">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="{{ $post->user->name }}'s Avatar"
                            class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">{{ $post->author }}</h2>
                        <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                @if ($post->image)
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-auto object-cover rounded-lg mb-4">
                @endif

                <h3 class="text-lg font-semibold mb-2">{{ $post->title }}</h3>
                <p class="text-base text-gray-700 mb-4">{{ $post->description }}</p>

                @if ($post->video)
                    <video controls class="w-full h-auto rounded-lg mb-4">
                        <source src="{{ Storage::url($post->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endif

                <div class="flex space-x-2">
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Delete</button>
                    </form>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition"
                        onclick="openEditModal('{{ $post->id }}', '{{ addslashes($post->title) }}', '{{ addslashes($post->description) }}', '{{ $post->image }}', '{{ $post->video }}')">Edit</button>
                </div>
            </div>
        @endforeach

    </div>


    <script>
        function openEditModal(id, title, description, image, video) {
            const modal = document.getElementById('editPostModal');
            const form = document.getElementById('editPostForm');

            modal.showModal(); // Open the modal

            // Set form action URL with post ID
            form.action = `/posts/${id}`;

            // Populate form fields
            document.getElementById('editTitle').value = title;
            document.getElementById('editDescription').value = description;
        }
    </script>

    <script>
        document.getElementById('media').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const fileType = file.type;
                const validImageTypes = ["image/gif", "image/jpeg", "image/png", "image/webp"];
                const validVideoTypes = ["video/mp4", "video/webm", "video/ogg"];
                if (!validImageTypes.includes(fileType) && !validVideoTypes.includes(fileType)) {
                    alert("Please upload a valid image or video file.");
                    this.value = ''; // Clear the input
                }
            }
        });
    </script>
</x-app-layout>
