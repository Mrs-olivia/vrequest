<div class="relative overflow-x-auto">
    @if (session('status'))
<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
</svg>
<span class="sr-only">Info</span>
<div class="ms-3 text-sm font-medium">
  {{session('status')}}
</div>
<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
  <span class="sr-only">Close</span>
  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
  </svg>
</button>
</div>
@endif
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Models
                </th>
                <th scope="col" class="px-6 py-3">
                    Lire
                </th>
                <th scope="col" class="px-6 py-3">
                    Enregistrer
                </th>
                <th scope="col" class="px-6 py-3">
                    Modifier
                </th>
                <th scope="col" class="px-6 py-3">
                    Supprimer
                </th>
            </tr>
        </thead>
        <tbody>
            
           
            @for($j = 0; $j<count($modelname);$j++)
                  
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$modelname[$j]}}
                    </th>
                {{-- les permissions de l'utilisateur--}}
                    @foreach ($permissions as $permission)
                       <input type="hidden" name="" {{$tab[] = $permission->name}}>
                        
                    @endforeach
                  
                    
                    @foreach ($per as $permission)
                        
                                          
                        @if ($modelname[$j]==='User')


                            @if (in_array($permission, $tab))
                        

                            <td class="px-7 py-4">
                                @if ($permission==='lire')
                                    <div class="flex items-center">
                                        <input data-modal-target="des-modal"  data-modal-toggle="des-modal"   onclick="Dlire(event)" id="checkbox-all-search" name="{{$permission}}" @checked(true) type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <a id="d-{{$permission}}" href="{{route('desactiver_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                    </div>
                                @endif


                                @if ($permission==='enregistrer')
                                    <div class="flex items-center">
                                        <input data-modal-target="des-modal"  data-modal-toggle="des-modal"   onclick="Denregistrer(event)" id="checkbox-all-search" name="{{$permission}}" @checked(true) type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <a id="d-{{$permission}}" href="{{route('desactiver_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                    </div>
                                @endif


                                @if ($permission==='modifier')
                                    <div class="flex items-center">
                                        <input data-modal-target="des-modal"  data-modal-toggle="des-modal"   onclick="Dmodifier(event)" id="checkbox-all-search" name="{{$permission}}" @checked(true) type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <a id="d-{{$permission}}" href="{{route('desactiver_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                    </div>
                                @endif


                                @if ($permission==='supprimer')
                                    <div class="flex items-center">
                                        <input data-modal-target="des-modal"  data-modal-toggle="des-modal"   onclick="Dsupprimer(event)" id="checkbox-all-search" name="{{$permission}}" @checked(true) type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <a id="d-{{$permission}}" href="{{route('desactiver_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                    </div>
                                @endif
                            </td>
                            @endif

                            
                            @if (!in_array($permission, $tab))


                            <td class="px-7 py-4" >
                                @if ($permission === 'lire')
                                    <div class="flex items-center">
                                        <input data-modal-target="check-modal"  data-modal-toggle="check-modal"  id="checkbox" onclick="Lire(event)"  type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="checkbox_{{$permission}}">
                                        <a id="check-{{$permission}}" href="{{route('assign_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                        
                                    </div>
                                @endif


                                @if ($permission === 'enregistrer')
                                    <div class="flex items-center">
                                        <input data-modal-target="check-modal"  data-modal-toggle="check-modal"  id="checkbox" onclick="Enregistrer(event)"  type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="checkbox_{{$permission}}">
                                        <a id="check-{{$permission}}" href="{{route('assign_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                        
                                    </div>
                                @endif


                                @if ($permission === 'modifier')
                                    <div class="flex items-center">
                                        <input data-modal-target="check-modal"  data-modal-toggle="check-modal"  id="checkbox" onclick="Modifier(event)"  type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="checkbox_{{$permission}}">
                                        <a id="check-{{$permission}}" href="{{route('assign_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                        
                                    </div>
                                @endif


                                @if ($permission === 'supprimer')
                                    <div class="flex items-center">
                                        <input data-modal-target="check-modal"  data-modal-toggle="check-modal"  id="checkbox" onclick="Supprimer(event)"  type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="checkbox_{{$permission}}">
                                        <a id="check-{{$permission}}" href="{{route('assign_permission',['name' => $permission, 'role' => $roleId])}}"></a>
                                        
                                    </div>
                                @endif
                            
                            </td>
                        
                            @endif
                            
                            
                        @else
                        <td class="px-7 py-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search"  type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div> 
                        </td>
                        @endif
                            
                    @endforeach

                    
            @endfor
             
                
          
        </tbody>
    </table>
</div>
<x-checkboxDes/>
<x-checkboxAdd/>