@include('Components.header')
@include('Components.navbar')


<div class="container overflow-auto">
    
    <table class="table table-bordered table-striped table-hover text-center align-middle table-responsive">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Size</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total Price</th>
            <th scope="col">Remove</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td >
                <img style="width:50px;" src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-tmbnail">
            </td>
            <td>Shirt</td>
            <td>Small</td>
            <td>
                <div class="input-group w-75 align-middle justify-content-center">
                    <button id="minusButton" class="btn btn-outline-primary" type="button" onclick='decrementValue("#quantity");minus("#price,#total");'>-</button>
                    <input type="number" id="quantity" class="form-control border-primary text-center" style="width:20px" value="1" min="1">
                    <button id="plusButton" class="btn btn-outline-primary" type="button" onclick='incrementValue("#quantity");add("#price,#total");'>+</button>
                </div>
            </td>
            <td id="price">PKR 1000</td>
            <td id="total">PKR 5000</td>
            <td>remove</td>
        </tr>
    </tbody>
    </table>
</div>
@include('Components.footer')
<script>
    function incrementValue(argument)
    {
        document.querySelector(argument).value++;
    }

    function decrementValue(argument)
    {
        let element = document.querySelector(argument);
        
        if(element.value>1)
        {
            element.value--;
        }
    }
</script>

<script>
    let plusButton = document.querySelector('#plusButton');
    plusButton.onclick(
        () =>
        {
            console.log(plusButton);
        }
    );
    

    function add(price, total)
    {
        price = document.querySelector(total);
        price = parseFloat(price.innerHTML.split(" ")[1]);

        // total = document.querySelector(total);
        // total = parseFloat(total.innerHTML.split(" ")[1]);
        console.log(price);
    }

    function minus(argument)
    {
        let element = document.querySelector(argument);
        
        if(element.value>1)
        {
            element.value--;
        }
    }
</script>
