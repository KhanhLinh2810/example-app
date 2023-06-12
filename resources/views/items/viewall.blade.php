@include('items.header')
<form action="../items/add" method="post">
    @csrf
    <input type="text" value="I have to..." onclick="this.value=''" name="todo" /> 
    <input type="submit" value="add" />
</form>
<br/><br/>

@foreach($todos as $todo) 
    <a class="big" href="../items/view/{{ $todo->id }}/{{ $todo->item_name }}">
        <span class="item">
            {{ $loop->index +1 }}
            {{ $todo->item_name }}
        </span>
    </a><br/>
@endforeach

@include('items.footer')