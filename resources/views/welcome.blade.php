

<x-landing-layout>
    

    <div id="content" class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-4">
       
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/cars',
                type: 'GET',
                dataType: 'html',
                success: function(response) {
                    // Insert the HTML into the element with ID "content"
                    $('#content').html(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle any errors here
                    console.error(textStatus, errorThrown);
                }
            });
        })
     </script>
</x-landing-layout>