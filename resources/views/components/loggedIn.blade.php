<div class="flex items-center md:order-2 pr-3">
  <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="notification" data-dropdown-placement="bottom">
    <x-monoicon-notification class="pr-4" color="white" width="35" />
  </button>
  <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
    <x-codicon-account color="white" width="30" />    
  </button>
  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="notification">
    <div class="px-4 py-3">
      <span class="block text-sm text-gray-900 ">Notification</span>
    </div>
    <ul class="py-1" aria-labelledby="user-menu-button">
      <li>
        <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
      </li>
    </ul>
  </div>
  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="user-dropdown">
    <div class="px-4 py-3">
      <span class="block text-sm text-gray-900 ">Bonnie Green</span>
      <span class="block text-sm font-medium text-gray-500 truncate ">name@flowbite.com</span>
    </div>
    <ul class="py-1" aria-labelledby="user-menu-button">
      <li>
        <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
      </li>
    </ul>
  </div>
  <p class="pl-4 text-white">{{username}}</p>
</div>