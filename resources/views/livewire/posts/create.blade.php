<div>
    {{-- The whole world belongs to you. --}}
    <div id="create-post-box" class="mt-4">
        <div class="card-header">
            <h2 class="text-center">Create Post</h2>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="title">
                <label for="title">Title</label>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="content">
                <label for="content">Content</label>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn" type="submit" wire:click="createPost()"><span>Post</span></button>
            </div>
        </div>
    </div>
    <style scoped>
        #create-post-box{
            background-color:  	#F6FBF4;
        }

        .card-header{
            background-color:#4B8673;
        }
        a{
            color: #BAFF29;
            margin-right: 8px;
        }

        .btn{
            background-color: #F5DF99;
        }
       
        .btn:hover {
            background-color: #4B8673;
        }

        .card{
            width: 500px;
        }
    
    </style>
</div>
