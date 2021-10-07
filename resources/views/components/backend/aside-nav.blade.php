<aside class="w-48 pr-4">
    <h4 class="mb-2 border-b">Nav Links</h4>
    <ul>
        <li class="px-2 mb-2 rounded {{ request()->is('admin/dashboard') ? 'bg-blue-400 text-white' : ''}}">
            <a href="/admin/dashboard">Dashboard</a>
        </li>
        <div class="border-b"></div>
        <li class="px-2 mt-2 rounded {{ request()->is('admin/posts') ? 'bg-blue-400 text-white' : ''}}">
            <a href="/admin/posts">All Posts</a>
        </li>
        <li class="px-2 mb-2 rounded {{ request()->is('admin/posts/create') ? 'bg-blue-400 text-white' : ''}}">
            <a href="/admin/posts/create">New Post</a>
        </li>
        <div class="border-b"></div>
        <li class="px-2 mt-2 rounded {{ request()->is('admin/users') ? 'bg-blue-400 text-white' : ''}}">
            <a href="/admin/users">All Users</a>
        </li>
    </ul>
</aside>
