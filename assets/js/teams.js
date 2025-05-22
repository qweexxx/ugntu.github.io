const linksj = document.querySelectorAll("a.teams");

for (let index = 0; index < linksj.length; index++) {
    let id = linksj[index].dataset.id
    linksj[index].addEventListener("click", TeamsJoin.bind(id,linksj[index]))
}

const linksd = document.querySelectorAll("a.team_disconnect");

for (let index = 0; index < linksd.length; index++) {
    let id = linksd[index].dataset.id
    linksd[index].addEventListener("click", TeamDisconnect.bind(id,linksd[index]))
}

async function TeamsJoin(a, event) {
    let url = `/function/controllers/teamjoin.php`;

    let serverData = await connectToServer(a, event, url, "POST");
    if (serverData.status != 200) {
       
    } else {

        let note = document.querySelector(".notices");
        note.insertAdjacentHTML("beforeend",`
        <div class="notice">
            <p>${serverData.data.message}</p>
        </div>`);

        const sleep = ms => new Promise(resolve => setTimeout(resolve, ms));
        
        note.classList.add("active")
        await sleep(5000);
        note.classList.remove("active")
        note.innerHTML="";
    }
    
}

async function TeamDisconnect(a, event) {
    let url = `/function/controllers/teamdisconnect.php`;

    let serverData = await connectToServer(a, event, url, "POST");
    console.log(serverData)
    if (serverData.status != 200) {
       
    } else {

        let note = document.querySelector(".notices");
        note.insertAdjacentHTML("beforeend",`
        <div class="notice">
            <p>${serverData.data.message}</p>
        </div>`);

        const sleep = ms => new Promise(resolve => setTimeout(resolve, ms));
        
        note.classList.add("active")
        await sleep(5000);
        note.classList.remove("active")
        note.innerHTML=""
    }
    
}

async function connectToServer(a, event, url, method) {
    event.preventDefault();
    var object = {'id': a.dataset.id}
    var json = JSON.stringify(object);
    let promice = await fetch(url, {
        method: method,
        headers: {
            "Content-type": "application/json",
        },
        body: json
    })

    let data = await promice.json();

    return {
        data: data,
        status: promice.status
    }
}
