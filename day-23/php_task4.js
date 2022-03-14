$.ajax({
    url: "https://raw.githubusercontent.com/thatisuday/indian-cities-database/master/cities.json",
    method: "GET",
    success: function (result) {
        obj = JSON.parse(result);
        state();
    }
});

function state () {
    let all_state_array = [];

    for (var i = 0; i < obj.length; i++) {
        all_state_array.push(obj[i]['state']);
    }
    let unique_states = [...new Set(all_state_array)];

    for (var i = 0; i < unique_states.length;i++) {
        $("#state").append(`<option value="${unique_states[i]}">${unique_states[i]}</option>`);

    }
    return unique_states;
}

function city(state) {
    $.ajax({
        url: "api.php",
        method: "GET",
        data:  {
            state: state
        },
        success: function (result) {
            $("#city").html(result);
        }

    });
    
}

