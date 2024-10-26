@extends('layouts.admin')
@section('content')
<section class="flex bg-gray-50 dark:bg-gray-900">
  <div class="w-full mt-4 max-w-screen-xl px-4 mx-auto lg:px-12">
    <!-- Start coding here -->
    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
      <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
        <div>
          <h5 class="mr-3 font-semibold dark:text-white">Upgate Info of User ID {{$user->id}}</h5>
          <p class="text-gray-500 dark:text-gray-400">Update User Info for {{$user->name}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="flex h-screen bg-gray-50 dark:bg-gray-900">
  <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs mt-4 max-w-screen-xl px-4 mx-auto lg:px-12">
      <div class="w-full overflow-x-auto">
      <form action="{{route('submit.edit')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}">
        <table class="w-full whitespace-no-wrap">
            <tbody class=" text-center bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">User ID</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-xs"><input disabled type="text" class="p-1 rounded bg-white dark:bg-gray-700 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800" id="" name="id" value="{{$user->id}}"></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Username</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-xs"><input type="text" class=" tep-1 rounded bg-white dark:bg-gray-700 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800" id="" name="username" value="{{$user->username}}"></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Name</td>
                    <td>:</td>
                  <td class="px-4 py-3 text-xs"><input type="text" class="p-1 rounded bg-white dark:bg-gray-700 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800" id="" name="name" value="{{$user->name}}"></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Email</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-sm"><input disabled type="text" class="p-1 rounded bg-white dark:bg-gray-700 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800" id="" name="email" value="{{$user->email}}"></td>
                </tr>
                
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Phone</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-xs"><input type="text" class="p-1 rounded bg-white dark:bg-gray-700 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800" id="" name="phone" value="{{$user->phone}}"></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-xs">User Role</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-sm"> 
                        <select class="p-1 rounded bg-white dark:bg-gray-700 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800" name="role">
                            <option value="">Select User Role</option>
                            @foreach($allRole as $role)
                            <option value="{{$role->role_id}}" {{($role->role_id == $user->role)? 'selected' : '' }}>{{$role->role_name}}</option>
                            @endforeach
                        </select> 
                    </td>
                </tr>
          </tbody>
            
        </table>
        <div class=" flex flex-col md:flex-row items-center justify-center bg-gray-50 dark:bg-gray-900 border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                <a href="{{route('all.users')}}" type="button" class="text-gray-800 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800">Cancel</a>
                @if((Auth::user()->role == '1'))
                    <button href="#" type="submit" class="text-gray-800 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:text-white dark:focus:ring-yellow-900">Update</button>
                @endif
            </div>
          </form>
      </div>
    </div>
</section>
@endsection