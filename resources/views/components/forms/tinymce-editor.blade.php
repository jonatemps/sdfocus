<form method="post" action="{{route('post')}}">
    @csrf
    <textarea name="content" id="myeditorinstance">Hellddddddddo, World!</textarea>
    <button type="submit">Envoyer</button>
</form>
