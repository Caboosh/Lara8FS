<aside class="w-48 pr-4">
    <h4 class="mb-2 border-b">Nav Links</h4>
    <ul>
        <li class="px-2 rounded {{ request()->is('admin/dashboard') ? 'bg-blue-400 text-white' : ''}}">
            <a href="/admin/dashboard">Dashboard</a>
        </li>
        <li class="px-2 rounded {{ request()->is('admin/posts/create') ? 'bg-blue-400 text-white' : ''}}">
            <a href="/admin/posts/create">New Post</a>
        </li>
    </ul>
</aside>
