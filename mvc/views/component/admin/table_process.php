<head>
    <link rel="stylesheet" href="./mvc/views/style/table_process.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<div class="process-container">
    <ul class="nav">
        <li class='nav-link req_a'>
            Yêu cầu
            <sub id="count-reqs">1</sub>
        </li>
        <li class='nav-link picked_a'>
            Hẹn lịch
        </li>
        <li class='nav-link late_a'>
            Trễ hẹn
        </li>
        <li class='nav-link done_a'>
            Done
        </li>
    </ul>
    <div id="process-content">
        <ul>
        </ul>
    </div>
</div>
<script type="text/javascript">

    // request content
    function popRequest(props) {
        // Loop all below code for all item in Request database
        let content = document.querySelector("#process-content ul")
        let li = document.createElement('li')       

        let span = document.createElement('span')
        span.textContent = `${props.name} - ${props.phone} - ${props.time}`
        li.appendChild(span)

        let check = document.createElement('div')
        check.innerHTML = '<i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-ban" aria-hidden="true"></i>'
        check.setAttribute('style', 'width: 15%;',)
        li.appendChild(check)

        li.setAttribute(
            'style',
            'background-color: #C4C4C4; max-width: 32vw; height: 35px; padding-left: 10px; padding-top: 12px; display: flex; justify-content: space-between;',
        )
        content.appendChild(li)

        let check_btn = document.getElementsByClassName('fa')[0]
        let ban_btn = document.getElementsByClassName('fa')[1]
        check_btn.addEventListener('click', () => {
            // remove item from database
            // add item to Picked data
        }) 
        ban_btn.addEventListener('click', () => {
            // remove item from database
        })
    }

    // picked content
    function popPicked(props) {
        // Loop all below code for all item in Picked database
        let content = document.querySelector("#process-content ul")
        let li = document.createElement('li')

        let span = document.createElement('span')
        span.textContent = `${props.name} - ${props.phone} - ${props.time}`
        li.appendChild(span)

        let check = document.createElement('div')
        check.innerHTML = '<i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-ban" aria-hidden="true"></i>'
        check.setAttribute('style', 'width: 15%;',)
        li.appendChild(check)
        
        li.setAttribute(
            'style',
            'background: #F1DABF; max-width: 32vw; height: 35px; padding-left: 10px; padding-top: 12px; display: flex; justify-content: space-between;',
        )
        content.appendChild(li)

        let check_btn = document.getElementsByClassName('fa')[0]
        let ban_btn = document.getElementsByClassName('fa')[1]
        check_btn.addEventListener('click', () => {
            // remove item from database
            // add item to Done data
        }) 
        ban_btn.addEventListener('click', () => {
            // remove item from database
        })
    }

    // late content
    function popLate(props) {
        // Loop all below code for all item in Late database
        let content = document.querySelector("#process-content ul")
        let li = document.createElement('li')

        let span = document.createElement('span')
        span.textContent = `${props.name} - ${props.phone} - ${props.time}`
        li.appendChild(span)

        let check = document.createElement('div')
        check.innerHTML = '<i class="fa fa-ban" aria-hidden="true"></i>'
        check.setAttribute('style', 'width: 15%;',)
        li.appendChild(check)

        li.setAttribute(
            'style',
            'background-color: red; max-width: 32vw; height: 35px; padding-left: 10px; padding-top: 12px; display: flex; justify-content: space-between;',
        )
        content.appendChild(li)
        let check_btn = document.getElementsByClassName('fa')[0]
        check_btn.addEventListener('click', () => {
            // remove item from database
        }) 
    }

    // done content
    function popDone(props) {
        // Loop all below code for all item in Done database
        let content = document.querySelector("#process-content ul")
        let li = document.createElement('li')

        let span = document.createElement('span')
        span.textContent = `${props.name} - ${props.phone} - ${props.time}`
        li.appendChild(span)

        let check = document.createElement('div')
        check.innerHTML = '<i class="fa fa-check" aria-hidden="true"></i>'
        check.setAttribute('style', 'width: 15%;',)
        li.appendChild(check)

        li.setAttribute(
            'style',
            'background-color: green; max-width: 32vw; height: 35px; padding-left: 10px; padding-top: 12px; display: flex; justify-content: space-between;',
        )
        content.appendChild(li)
        let check_btn = document.getElementsByClassName('fa')[0]
        check_btn.addEventListener('click', () => {
            // remove item from database
        }) 
    }

    let li = document.querySelectorAll('.nav-link')
    var active;
    for (let i = 0; i < li.length; i++) {
        li[i].addEventListener("click", () => {
            if (active) {
                if (active==i+1) {
                    return;
                }
                li[active - 1].style.background = 'rgb(36, 36, 36)';
            }
            li[i].style.background = 'linear-gradient(180deg, #1326C0, #BDBEC0)';
            active = i + 1;
            // remove old content
            var content = document.querySelector("#process-content ul")
            content.innerHTML=""
            // new content
            funcName = li[i].getAttribute("class").split(" ")[1];
            if (funcName==="req_a") {
                popRequest({name:"Chinh", phone:"0944915498", time:"19:00"})
            } else if (funcName==="picked_a") {
                popPicked({name:"Chinh", phone:"0944915498", time:"19:00"})
            } else if (funcName==="late_a"){
                popLate({name:"Chinh", phone:"0944915498", time:"19:00"})
            } else {
                popDone({name:"Chinh", phone:"0944915498", time:"19:00"})
            }
        });
    }
</script>