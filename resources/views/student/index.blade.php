<x-layout>

    <h1 class="text-2xl font-bold">Student List</h1>
    <table class="px-10 w-full border">
        <thead class="w-full ">
            <tr class="w-full">
                <th class="table-cell">Id</th>
                <th class="table-cell">Name</th>
                <th class="table-cell">Age</th>
                <th class="table-cell">ClassId</th>
                <th class="table-cell">Email</th>
                <th class="table-cell">Phone</th>
                <th class="table-cell">Action</th>
            </tr>
        </thead>
        <tbody class="px-4">
            @foreach($students as $student)
            <tr class="w-full ">
                <td>
                    <a class="underline" href="{{route('student.show',$student)}}">{{$student->id}}</a>
                </td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->class_id}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td class="gap-4 flex">
                    <a href="" class="bg-blue-600 rounded px-4 py-2">
                        Edit
                    </a>
                    <form method="POST" action="{{route('student.destroy',$student)}}">
                        @csrf 
                        @method("DELETE")
                    <button onclick="return confirm('Are sure?') " class="bg-red-600 rounded px-4 py-2">
                        Delete
                    </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    
    
    </table>

    <div class="flex items-center justify-center mt-10">
        {{$students->links()}}
    </div>

</x-layout>
