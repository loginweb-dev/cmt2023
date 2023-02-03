<div class='search-form-outer'>
    <form method='get' action='{{route("binshopsblog.search")}}' class='text-center'>
        <h4>Busca algo en nuestro blog:</h4>
        <input type='text' name='s' placeholder='Search...' class='form-control' value='{{\Request::get("s")}}'>
        <input type='submit' value='Buscar' class='btn btn-success m-2'>
    </form>
</div>