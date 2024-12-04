<x-layout>

<div class="flex items-center justify-center h-screen">
    <form 
    method="POST"
    action="{{route('student.update',$student)}}"  class="w-[400px] text-white">
        @csrf
        @method('PUT')
        <h2 class="text-2xl font-bold text-center ">Edit Student</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-600">{{ $error }}</li>
            @endforeach
        </ul>
        
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-2">
                <label for="name">Name</label>
                <input placeholder="Enter Name" type="text" value="{{$student->name}}" required name="name" id="name" class="border border-gray-800 bg-gray-950 rounded px-4 py-2">
                
            </div>
            <div class="flex flex-col gap-2">
                <label for="age">Age</label>
                <input placeholder="Enter Age" value="{{$student->age}}" type="number" min="6" max="30" required name="age" id="age" class="border border-gray-800 bg-gray-950 rounded px-4 py-2">
                
            </div>
            <div class="flex flex-col gap-2">
                <label for="class_id">Class Id</label>
                <input placeholder="Class" type="number" value="{{$student->class_id}}"  required min="0" max="10" name="class_id" id="class_id" class="border bg-gray-950 border-gray-800 rounded px-4 py-2">
                
            </div>
            <div class="flex flex-col gap-2">
                <label for="email">Email</label>
                <input placeholder="Email" type="email" value="{{$student->email}}" required name="email" id="email" class="border border-gray-800 bg-gray-950 rounded px-4 py-2">
                
            </div>
            <div class="flex flex-col gap-2">
                <label for="phone">Phone</label>
                <input placeholder="phone" type="text" required value="{{$student->phone}}" name="phone" id="phone" class="border border-gray-800 bg-gray-950 rounded px-4 py-2">

            </div>
            <div class="flex flex-col gap-2">
                <label for="address">Address</label>
                <input placeholder="address" type="text" required value="{{$student->address}}" name="address" id="address" class="border border-gray-800 bg-gray-950 rounded px-4 py-2">
</div>
<div class="flex flex-col gap-2">
    <button class="bg-blue-600 rounded px-4 py-2 text-white">Save</button>
</div>
</div>
</form>
</div>

</x-layout>