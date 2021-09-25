@include('layouts.app')
<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-4">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-20">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-sm">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Category
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Created_At
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($skill as $item)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    {{$item->name}} 
                  </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <div class="text-sm text-gray-900"> {{$item->category}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$item->created_at}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <a href="/skills/{{$item->id}}" class="text-indigo-600 hover:text-indigo-900">View</a>
              </td> 
            </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
