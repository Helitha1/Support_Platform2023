showError=(code)=>{
    switch (code) {
        case 99:
            return('REQUEST JSON ERROR')
            break;
        case 1:
            return('First Name is null ')
            break;
        case 2:
            return('Last Name is null')
            break;
        case 3:
            return('first name must be less that 45 characters ')
            break;
        case 4:
            return('last name must be less that 45 characters ')
            break;
        case 5:
            return('email is null')
            break;
        case 6:
            return('email must be less that 100 characters ')
            break;
        case 7:
            return('invalid email')
            break;
        case 8:
            return('password is null')
            break;
        case 9:
            return('password must be more that 5 and less that 20 characters')
            break;
        case 10:
            return('profession not selected')
            break;
        case 11:
            return('this email alredy used');
            break;
        case 12:
            return('user not found');
            break;
        case 13:
            return('Invalid password, try again!');
            break;
        case 14:
            return('re enter your password!');
            break;
        case 15:
            return('password dosent match!');
            break;
        case 16:
            return('verification code empty!');
            break;
        case 17:
            return('invalid email or verifiacation code!');
            break;
    
        default:
            break;
    }
}