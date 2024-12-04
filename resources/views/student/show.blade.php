<x-layout>
    <div class="flex justify-around">
    <h1>Student Profile</h1>
    <a href="{{route('student.edit',$student)}}" class="bg-blue-600 rounded px-4 py-2">
                        Edit
                    </a>
    <button class="bg-red-600 rounded px-4 py-2">
                        Delete
    </button>
    </div>
    <h2>Name: {{$student->name}}</h2>
    <h2>Age: {{$student->age}}</h2>
    <h2>Class Id: {{$student->class_id}}</h2>
    <h2>Email: {{$student->email}}</h2>
    <h2>Phone: {{$student->phone}}</h2>
    <h2>Address: {{$student->address}}</h2>
</x-layout>