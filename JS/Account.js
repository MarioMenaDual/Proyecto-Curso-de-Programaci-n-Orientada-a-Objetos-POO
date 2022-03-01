function Account(name, document, email,password) {
    this.id;
    this.name = name;
    this.document = document;
    this.email = email;
    this.password = password;
}

Account.prototype.printDataAccount = function () {
    console.log(this.name)
    console.log(this.document)
    console.log(this.email)
    console.log(this.password) 
}