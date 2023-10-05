showError=(code)=>{
    switch (code) {
        case 99:
            return('REQUEST JSON ERROR')
            break;
        case 1:
            return('First Name is NULL')
            break;
        case 2:
            return('Last Name is NULL')
            break;
        case 99:
            return('REQUEST JSON ERROR')
            break;
    
        default:
            break;
    }
}