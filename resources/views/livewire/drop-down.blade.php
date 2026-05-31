<div x-data="{ open: @entangle('isOpen') }">
    <button @click="open = true">Show Modal</button>

    <div x-show="open">
        <div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('students.index') }}">Students</a></li>
                <li><a href="{{ route('students.create') }}">Create</a></li>
            </ul>
            
            
            <button @click="open = false">Close Modal</button>
        </div>
    </div>
</div>
