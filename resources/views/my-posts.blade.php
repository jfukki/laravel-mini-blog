<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts View') }}
        </h2>
    </x-slot>


        @if(session()->has('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        @endif

    

 <div class="container mt-5" style="background-color:#FFFAFA; padding:20px; border-radius:20px;">
    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5">
            
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Post Title</th>
                <th scope="col">Post Description</th>
                <th scope="col">Author Name</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($posts as $post)


                <tr>
                <th scope="row">1</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->user->name}}</td>

                <td>


                  
                    <form action="" method="">
                        @csrf
                        <a href="" class="btn btn-outline-success btn-sm form-control" >View Detail</a>
                    </form>
   
                    <form action="" method="">
                        @csrf
                        <a href="" class="btn btn-outline-warning btn-sm form-control">Edit</a>
                    </form>

                    <form action="" method="">
                        @csrf
                        <a href="" class="btn btn-outline-danger btn-sm form-control">Delete</a>
                    </form>

                </td>
                </tr>

                @endforeach
                
                 
            </tbody>
        </table>

        </div>
    </div>
 </div>
</x-app-layout>
