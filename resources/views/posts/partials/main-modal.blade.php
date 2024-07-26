<dialog id="createPostModal" class="modal">
    <div class="modal-box w-11/12 max-w-2xl">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold pb-4">Create Post!</h3>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" name="author" id="author" value="{{ Auth::user()->name }}" hidden />
                <input type="text" name="user_id" id="user_id" value="{{ Auth::user()->id }}" hidden />
            </div>

            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Title</span>
                    </div>
                </label>
                <input type="text" name="title" id="title" placeholder="Anything on your mind?"
                    class="input input-bordered w-full" required />
            </div>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Description</span>
                </div>
                <textarea class="textarea textarea-bordered h-24" id="description" name="description" placeholder="Describe it"
                    required></textarea>
            </label>

            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text-alt">Upload Image or Video (optional)</span>
                    </div>
                </label>
                <input type="file" name="media" id="media" accept="image/*,video/*" placeholder="Describe it"
                    class="input input-bordered w-full" />

            </div>
            <div class="flex pt-4 justify-end">
                <button class="btn btn-outline btn-primary">Create Post</button>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
