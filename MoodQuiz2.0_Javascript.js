var prompts = [
    {
        prompt: 'I am often bothered by feeling down, depressed or hopeless',
        weight: 5,
        class: 'group1'
    },
    {
        prompt: 'I find myself having difficulty controlling my worry and performing necessary tasks at work, home, or school?',
        weight: -5,
        class: 'group2'
    },
    {
        prompt: 'I noticed lately that I have been jittery, on edge?',
        weight: -3,
        class: 'group3'
    },
    {
        prompt: 'I often have been bothered by poor appetite or overeating',
        weight: 1,
        class: 'group4'
    },
    {
        prompt: 'I usually worry about simple things that I shouldnt worry about',
        weight: -5,
        class: 'group5'
    },
    {
        prompt: 'I am usually highly motivated and energetic',
        weight: -5,
        class: 'group6'
    },
    {
        prompt: 'I avoid situations such as being alone or in crowded situations, driving or riding in a car or public transportation, or going to movie theaters',
        weight: -5,
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
    Use our Resources page for additional help\n\
    <br><br>\
    We also have links and numbers to different doctors you can contact.\n\n\
    <br><br>\
    Never be afraid to get help.';

        } else if(total < 0) {
            document.getElementById('results').innerHTML = '<b>You could be feeling anxious.</b><br><br>\
            This is very common for people to deal with so you are not alone. Talk to someone you trust and try breathing excercises.\
    <br><br>\
   Use the Resources page for more ways to help you overcome this!\
    <br><br>\
    You got this!'
    const img = new Image(300, 200); 
  img.src = "Anxiety.jpg";
  document.body.appendChild(img);; 
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
