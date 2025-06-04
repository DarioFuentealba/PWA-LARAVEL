<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-transparent border-none rounded-md font-semibold text-xs text-[#f4f1ee] uppercase tracking-widest shadow-sm hover:bg-[#f4f1ee] hover:text-[#6e1414] focus:outline-none focus:ring-2 focus:ring-[#0d1b2a] focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
