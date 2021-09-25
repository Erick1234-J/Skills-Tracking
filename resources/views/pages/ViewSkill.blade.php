@include('layouts.app')

<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="p-6 bg-white" style="font-size: 35px">More About My Skill</h1> <hr>
                    <h1 class="p-6 bg-white" style="font-size: 25px">{{$item->name}}</h1>
                    <h2 class="p-6 bg-white" style="font-size: 15px">{{$item->category}}</h2>
                    <h2 class="p-6 bg-white" style="font-size: 15px">{{$item->description}}</h2>
                    <h2 class="p-6 bg-white" style="font-size: 15px">{{$item->year_skill_aquired}}</h2>
                    <h2 class="p-6 bg-white" style="font-size: 15px">{{$item->created_at}}</h2><hr><br><br>
                    <a href="/skills" class="text-grey-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" style="background-color: rgb(26, 5, 102); color: white; margin-left: 15px;">Back</a>
                    <a href="/skills/{{$item->id}}/edit" class="text-grey-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" style="background-color: rgb(26, 5, 102); color: white; margin-left: 15px;">Edit</a>
                    <a href="/skills/{{$item->id}}/destroy" class="text-grey-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" style="background-color: rgb(26, 5, 102); color: white; margin-left: 15px;">Delete</a>
                </div>
            </div>
        </div>  
</body>

