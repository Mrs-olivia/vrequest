<x-app-layout>

    @include('layouts.item')

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Numero
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
    
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $i=>$item)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       {{$i+1}}
                    </th>
                    <td class="px-6 py-4">
                      {{$item->username}}
                    </td>
                    <td class="px-6 py-4">
                        
                        <a href="{{route('user_role.show',$item->id)}}" ><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">roles</button></a>  
    
                    </td>
                   
                </tr>
                @endforeach
               
             
            </tbody>
        </table>
    </div>

</x-app-layout>