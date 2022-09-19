<div>
    {{-- Stop trying to control. --}}

    <div class="container col-md-6 offset-md-3 mt-3 mt-5">
        <div class="hays">
            <div class="">
                <h3 class="text-black">Are you sure you want to delete this post?</h3>
            </div>

            <div class="card-body">
                <table class="table" style="color:black">
                    <tr >
                        <th>
                            Title
                        </th>
                        <td>
                            {{ $this->post->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Content
                        </th>
                        <td>
                            {{ $this->post->content }}
                        </td>
                    </tr>
                </table>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn redness" wire:click="deletePost()">Delete</button>
                    <button class="btn btn-secondary mx-3" wire:click="backToPosts()">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style scoped>
    .hays{
        background-color: #F6FBF4;
    }
    h3{
        background-color: #4B8673;
    }
    .redness {
        background-color: rgb(224, 38, 38);
    }
    .redness:hover {
        background-color: rgba(218, 96, 51, 0.8);
    }
    .text-black {
        padding: 10px;
    }
</style>