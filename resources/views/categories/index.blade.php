<x-layout>

    <h1>Categories</h1>

    <select id="parentCategory" onchange="getCategories(this.value)">
        <option value="">Select a Parent Category</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

    <div id="subCategories"></div>

    <script>
        function getCategories(parentId) {
            $.ajax({
                url: '/categories/getCategories',
                data: {
                    parentId: parentId
                },
                dataType: 'json',
                success: function(data) {
                    $('#subCategories').html('');

                    $.each(data, function(index, category) {
                        $('#subCategories').append('<option value="' + category.id + '">' + category.name + '</option>');
                    });
                }
            });
        }
    </script>

</x-layout>