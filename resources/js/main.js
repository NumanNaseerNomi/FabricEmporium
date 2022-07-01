function incrementValue(argument)
{
    // alert(1);
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