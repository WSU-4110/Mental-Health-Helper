var prompts = [
    {
        prompt: 'I am often bothered by feeling down, depressed or hopeless',
        weight: 1,
        class: 'group1'
    },
    {
        prompt: 'I have trouble falling asleep or oversleeping',
        weight: 1,
        class: 'group2'
    },
    {
        prompt: 'I often have been bothered by feeling tired or having little energy',
        weight: 1,
        class: 'group3'
    },
    {
        prompt: 'I often have been bothered by poor appetite or overeating',
        weight: 1,
        class: 'group4'
    },
    {
        prompt: 'I often have little interest or pleasure in doing things',
        weight: 1,
        class: 'group5'
    },
    {
        prompt: 'I am usually highly motivated and energetic',
        weight: -1,
        class: 'group6'
    },
    {
        prompt: 'I find it easy to walk up to a group of people and join in the conversation',
        weight: -1,
        class:'group7'
    }

]
    
    var prompt_values = [
    {
        value: 'Strongly Agree', 
        class: 'btn-default btn-strongly-agree',
        weight: 5
    },
    {
        value: 'Agree',
        class: 'btn-default btn-agree',
        weight: 3,
    }, 
    {
        value: 'Neutral', 
        class: 'btn-default',
        weight: 0
    },
    {
        value: 'Disagree',
        class: 'btn-default btn-disagree',
        weight: -3
    },
    { 
        value: 'Strongly Disagree',
        class: 'btn-default btn-strongly-disagree',
        weight: -5
    }
    ]
    
   
    function createPromptItems() {

        for (var i = 0; i < prompts.length; i++) {
            var prompt_li = document.createElement('li');
            var prompt_p = document.createElement('p');
            var prompt_text = document.createTextNode(prompts[i].prompt);
    
            prompt_li.setAttribute('class', 'list-group-item prompt');
            prompt_p.appendChild(prompt_text);
            prompt_li.appendChild(prompt_p);
    
            document.getElementById('quiz').appendChild(prompt_li);
        }
    }
    
    function createValueButtons() {
        for (var li_index = 0; li_index < prompts.length; li_index++) {
            var group = document.createElement('div');
            group.className = 'btn-group btn-group-justified';
    
            for (var i = 0; i < prompt_values.length; i++) {
                var btn_group = document.createElement('div');
                btn_group.className = 'btn-group';
    
                var button = document.createElement('button');
                var button_text = document.createTextNode(prompt_values[i].value);
                button.className = 'group' + li_index + ' value-btn btn ' + prompt_values[i].class;
                button.appendChild(button_text);
    
                btn_group.appendChild(button);
                group.appendChild(btn_group);
    
                document.getElementsByClassName('prompt')[li_index].appendChild(group);
            }
        }
    }
    
    createPromptItems();
    createValueButtons();
    
   
    var total = 0;
    
    
    function findPromptWeight(prompts, group) {
        var weight = 0;
    
        for (var i = 0; i < prompts.length; i++) {
            if (prompts[i].class === group) {
                weight = prompts[i].weight;
            }
        }
    
        return weight;
    }
    
    
    function findValueWeight(values, value) {
        var weight = 0;
    
        for (var i = 0; i < values.length; i++) {
            if (values[i].value === value) {
                weight = values[i].weight;
            }
        }
    
        return weight;
    }
    
    
    $('.value-btn').mousedown(function () {
        var classList = $(this).attr('class');
       
        var classArr = classList.split(" ");
      
        var this_group = classArr[0];
        
    
       
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
            total -= (findPromptWeight(prompts, this_group) * findValueWeight(prompt_values, $(this).text()));
        } else {
            
            total -= (findPromptWeight(prompts, this_group) * findValueWeight(prompt_values, $('.'+this_group+'.active').text()));
           
            $('.'+this_group).removeClass('active');
    
           
            $(this).addClass('active');
            total += (findPromptWeight(prompts, this_group) * findValueWeight(prompt_values, $(this).text()));
        }
    
        console.log(total);
    })
    
    
    
    $('#submit-btn').click(function () {
        
        $('.results').removeClass('hide');
        $('.results').addClass('show');
        
        
        if(total > 0) {
            document.getElementById('results').innerHTML = '<b>You could be depressed</b><br><br>\
            You might be feeling depressed, that is why you are unhappy. To overcome this, you can look out for the symptoms of depression and consult a therapist accordingly.\n\
    <br><br>\
    Use our Helpful Links page for additional help\n\
    <br><br>\
    We also have links and numbers to different doctors you can contact\n\n\
    <br><br>\
    Never be afraid to get help.\
            ';
        } else if(total < 0) {
            document.getElementById('results').innerHTML = '<b>You are feeling good today!</b><br><br>\
            Today is a good day!!\
    <br><br>\
   Go do something fun today.\
    <br><br>\
    Keep that smile!';
        } else {
            document.getElementById('results').innerHTML = '<b>You could just be feeling down today</b><br><br>\
           It is ok to have these feelings some days.\
    <br><br>\
    There are ways to get help.\
    <br><br>\
    Check our helpful links page for some ways to help you get in a better mood.'
        }
    
        
        $('#quiz').addClass('hide');
        $('#submit-btn').addClass('hide');
        $('#retake-btn').removeClass('hide');
    })
    
   
    $('#retake-btn').click(function () {
        $('#quiz').removeClass('hide');
        $('#submit-btn').removeClass('hide');
        $('#retake-btn').addClass('hide');
    
        $('.results').addClass('hide');
        $('.results').removeClass('show');
    })