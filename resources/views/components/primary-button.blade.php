<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#0d1b2a] border border-transparent rounded-md font-semibold text-xs text-[#f4f1ee] uppercase tracking-widest hover:text-[#0d1b2a] hover:bg-[#f4f1ee] focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-[#0d1b2a] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
