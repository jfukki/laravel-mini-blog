<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Form') }}
        </h2>
    </x-slot>

 <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="title"  placeholder="Post Title Here">
               
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Password</label>
                <textarea   id="" cols="6" rows="6" name="body" class="form-control" id="body" placeholder="Post Body | Description here"></textarea>

            </div>
            
            <button type="submit" class="btn btn-outline-dark ">Submit</button>
        </form>


        </div>
    </div>
 </div>
</x-app-layout>
