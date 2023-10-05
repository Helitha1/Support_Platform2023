showError=(code)=>{
    switch (code) {
        case 99:
            return('REQUEST JSON ERROR')
        case 1:
            return('First Name is null ')
        case 2:
            return('Last Name is null')
        case 3:
            return('first name must be less that 45 characters ')
        case 4:
            return('last name must be less that 45 characters ')
        case 5:
            return('email is null')
        case 6:
            return('email must be less that 100 characters ')
        case 7:
            return('invalid email')
        case 8:
            return('password is null')
        case 9:
            return('password must be more that 5 and less that 20 characters')
        case 10:
            return('profession not selected')
        case 11:
            return('this email alredy used');
        case 12:
            return('user not found');
        case 13:
            return('Invalid password, try again!');
        case 14:
            return('re enter your password!');
        case 15:
            return('password dosent match!');
        case 16:
            return('verification code empty!');
        case 17:
            return('invalid email or verifiacation code!');
        case 18:
            return('Verification Code sending Failed');
        default:
            return(code)
    }
}