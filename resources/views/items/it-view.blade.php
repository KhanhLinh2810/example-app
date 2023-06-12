@include('items.header')

    <h2>{{ $todo->item_name }}</h2>
    
    <form action="../../../items/delete/{{ $todo->id }}" method='post'>
        @csrf
        @method('delete')
        <button>
            <span class="item">
                Delete this item
            </span>
        </button>
    </form>

@include('items.footer')