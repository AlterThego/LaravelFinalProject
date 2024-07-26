<dialog id="editPostModal" class="modal">
    <div class="modal-box w-11/12 max-w-2xl relative">
        <!-- Close Button -->
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
            onclick="document.getElementById('editPostModal').close()">✕</button>

        <h3 class="text-lg font-bold pb-4">Edit Post</h3>

        <!-- Edit Post Form -->
        <form id="editPostForm" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <div class="mb-4">
                <label class="form-control w-full">
                    <span class="label-text">Title</span>
                    <input type="text" name="title" id="editTitle" placeholder="Post Title"
                        class="input input-bordered w-full" required />
                </label>
            </div>

            <!-- Description Textarea -->
            <div class="mb-4">
                <label class="form-control w-full">
                    <span class="label-text">Description</span>
                    <textarea class="textarea textarea-bordered w-full h-24" id="editDescription" name="description"
                        placeholder="Post Description" required></textarea>
                </label>
            </div>

            <!-- Media Upload -->
            <div class="mb-4">
                <label class="form-control w-full">
                    <span class="label-text-alt">Upload Image or Video (optional)</span>
                    <input type="file" name="media" id="media" accept="image/*,video/*"
                        class="input input-bordered w-full" />
                </label>
            </div>

            <!-- Submit Button -->
            <div class="flex pt-4 justify-end">
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>
        </form>
    </div>

    <!-- Modal Backdrop -->
    <form method="dialog" class="modal-backdrop">
        <button type="button" onclick="document.getElementById('editPostModal').close()">Close</button>
    </form>
</dialog>
