let sreach_btn = document.getElementById("sreach_btn");
let input = document.getElementById("search");
let div = document.getElementById("content.div");


sreach_btn.addEventListener('click', () => {
    input.style = "display: inline-block";
    sreach_btn.innerHTML = "Fermé";
    
})

input.addEventListener("keyup", () => {
    // console.log(input.value);

    let data = new FormData();
    data.append("search", "isset");
    data.append("name", input.value);
    fetch("../data-access/searchPromo.php", {
        method : "POST",
        body : data
    }).then((response)=>{
        return response.json();
    }).then((data)=>{
        console.log(data);
        div.innerHTML = "";
        for(var i = 0; i < data.length; i++){
            div.innerHTML += 
            `
            <div id="content.div">  
                <div  class="prommo">
                    <div>${data[i]["NomPromotion"]}</div>
                        <div class="icon">
                        <a href="../data-access/delete.php?id_delete='.$res["id"].'" ><i id="icon_delete" class="fa-solid fa-trash"></i></a>
                        <a href="FormEdit.php?id_edit='.$res["id"].'" ><i id="icon_edit" class="fa-regular fa-pen-to-square"></i></a>
                        </div>
                </div>
            </div>
            `;
        }
    })
})
