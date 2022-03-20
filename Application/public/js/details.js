window.onload = () => {

    let slideIndex = 1;
    const changePic = (plusIndex) => {
        showSlide(slideIndex += plusIndex);
    }
    
    const showSlide = (slideIdx) => {
        console.log(slideIdx);
        let i;
        let detailPic = [].slice.call(document.getElementsByClassName('detailPic'));
        if (slideIdx > detailPic.length) { slideIndex = 1 }
        if (slideIdx < 1) { slideIndex = detailPic.length }
        for (i = 0; i < detailPic.length; i++) {
            detailPic[i].classList.add("d-none");
        }
        detailPic[slideIndex - 1].classList.remove("d-none");
    }
    
    document.getElementById("prev").onclick = () => changePic(-1);

    document.getElementById("next").onclick = () => changePic(1);

}