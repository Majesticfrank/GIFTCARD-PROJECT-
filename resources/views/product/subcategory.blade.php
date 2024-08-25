<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <style>
        .card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            cursor: pointer;
        }
        .card-info {
            display: none; /* Hide all card details by default */
        }
    </style>

<div class="container">
<div class="card" data-card-id="1">
    <div class="image-placeholder">
        <img src="{{asset('images/1724451602amazon.png')}}" alt="AMAZON CARD">
    </div>
    <div class="card-info">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="subcategory1">Subcategory</label>
                <select id="subcategory" name="subcategory" class="form-control" onchange="updateRate()">

                        @foreach($categories as $category) 
                    <option value="subcategory" data-rate="{{$category->Rate}}">
                        {{ $category->Subcategoryname }}
                    </option>
                    @endforeach 
                </select>
            </div>
            <div class="form-group">
                <label for="rate1">Rate</label>
                <input type="text" id="Rate" name="Rate"  readonly >
                 {{-- {{ $subcategory->Rate}}   --}}
            </div> 
            <button type="submit" class="btn">Confirm Trade</button>
        </form>
    </div>


</div>

</div>   


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to show card details
        function showCardDetails(cardId) {
            // Hide all card info
            document.querySelectorAll('.card-info').forEach(info => {
                info.style.display = 'none';
            });

            // Show the selected card's info
            const card = document.querySelector(`.card[data-card-id="${cardId}"] .card-info`);
            if (card) {
                card.style.display = 'block';
            }
        }

        // Attach click event listeners to all cards
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('click', function() {
                const cardId = this.getAttribute('data-card-id');
                showCardDetails(cardId);
            });
        });
    });

    function updateRate() {
    var select = document.getElementById('subcategory');
    var rate = select.options[select.selectedIndex].getAttribute('data-Rate');
    document.getElementById('Rate').value = rate;
}
 </script>
    
</body>
</html>