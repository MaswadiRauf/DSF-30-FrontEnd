@props(['active' => false])
<a {{ $attributes }}
   class="{{ $active ? 'text-white rounded bg-white-700 lg:bg-transparent lg:text-white-700 lg:p-0 dark:text-white' : 'text-white/50 border-b border-gray-100 hover:text-white hover:bg-gray-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0 dark:text-white/50 dark:hover:text-white dark:border-gray-700' }} block py-2 pr-4 pl-3"
   aria-current="{{ $active ? 'page' : false }}">
   {{ $slot }}
</a>
