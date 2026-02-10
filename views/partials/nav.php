 <!-- Left Sidebar -->
<aside class="w-64 bg-gray-800 text-white flex-shrink-0">
    <div class="p-6">
        <h1 class="text-2xl font-bold">Inventory</h1>
    </div>
    
    <nav class="mt-6">
        <a href="/" class="<?= urlIs("/") ? 'flex items-center px-6 py-3 bg-gray-900 border-l-4 border-blue-500' : 'flex items-center px-6 py-3 hover:bg-gray-700 transition' ?>">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            Dashboard
        </a>
        
        <a href="/products" class="<?= urlIs("/products") ? 'flex items-center px-6 py-3 bg-gray-900 border-l-4 border-blue-500' : 'flex items-center px-6 py-3 hover:bg-gray-700 transition' ?>">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
            Products
        </a>
        
        <a href="/reports" class="<?= urlIs("/reports") ? 'flex items-center px-6 py-3 bg-gray-900 border-l-4 border-blue-500' : 'flex items-center px-6 py-3 hover:bg-gray-700 transition' ?>">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
            Reports
        </a>
    </nav>
</aside>