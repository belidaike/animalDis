<div>
    {{-- In work, do what you enjoy. --}}

    <div class="d-flex justify-content-between flex-wrap">
        
        @foreach ($posts as $post)
        <div id="post-box" class=" align-self-stretch m-1" style="width: 50%">
            <div class="baw">
                <h1 class="text-center uwu">Recent Post</h1>
                <div class="text-center hoygana">
                    <h4>{{ $post->title }}</h4>
                    <div class="ayo" id="timestamp">{{ $post->created_at->format('F d, Y g:i A') }}</div> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer d-flex">
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>


    <style scoped>
        .card-footer{
            background-color: #4B8673;
            margin-bottom: 100px;
        }
        .uwu {
            background: #4B8673;
            margin: 0;
        }
        a{
            margin-right: 8px;
            
        }
        i{
            color: black;
        }
        i:hover{
            color: #F6FBF4;
        }
    
        .baw {
            background-color: #5FD068;
        }
        .hoygana {
            background-color: #F6FBF4;
            padding: 1px;
        }
  
        .ayo {
            font-size: 100px;
        }
    
    </style>
</div>


