function ToSearch(){
    var search = document.getElementById("search").value;
    
    if(search.toLowerCase() == "add header"){
        location.href="Add-header.php";
        return false;
    }else if(search.toLowerCase() == "view header"){
        location.href="View-header.php";
        return false;
    }if(search.toLowerCase() == "add footer"){
        location.href="Add-footer.php";
        return false;
    }else if(search.toLowerCase() == "view footer"){
        location.href="View-footer.php";
        return false;
    }if(search.toLowerCase() == "add slidebar"){
        location.href="Add-slidebar.php";
        return false;
    }else if(search.toLowerCase() == "view slidebar"){
        location.href="View-slidebar.php";
        return false;
    }if(search.toLowerCase() == "add blogs"){
        location.href="Add-blogs.php";
        return false;
    }else if(search.toLowerCase() == "view blogs"){
        location.href="View-blogs.php";
        return false;
    }if(search.toLowerCase() == "add about"){
        location.href="Add-abouts.php";
        return false;
    }else if(search.toLowerCase() == "view about"){
        location.href="View-about.php";
        return false;
    }if(search.toLowerCase() == "add acountes social about"){
        location.href="Add-social-about.php";
        return false;
    }else if(search.toLowerCase() == "view acountes social about"){
        location.href="View-social-about.php";
        return false;
    }if(search.toLowerCase() == "add grid"){
        location.href="Add-grid.php";
        return false;
    }else if(search.toLowerCase() == "view grid"){
        location.href="View-grid.php";
        return false;
    }if(search.toLowerCase() == "add inner"){
        location.href="Add-inner.php";
        return false;
    }else if(search.toLowerCase() == "view inner"){
        location.href="View-inner.php";
        return false;
    }if(search.toLowerCase() == "add contact"){
        location.href="Add-contact.php";
        return false;
    }else if(search.toLowerCase() == "view contact"){
        location.href="View-contact.php";
        return false;
    }if(search.toLowerCase() == "view comments"){
        location.href="View-comments.php";
        return false;
    }else if(search.toLowerCase() == "view send us form"){
        location.href="View-send-us.php";
        return false;
    }else{
        alert("not found page");
    } 
}