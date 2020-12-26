function CalculateSum() {
    let total = 0;
    for (let i = 0; i < arguments.length; i++) {
        if(arguments[i] instanceof Array){
            total += getArrSum(arguments[i]);
        }else{
            total += parseInt(arguments[i]);
        }
    }

    return total;
}

function getArrSum(arr){
    let sum = 0;
    arr.forEach(function(v) {
        if (typeof v == 'object')
            sum += CalculateSum(v); //recursion
        else
            sum += v
    })
    return sum; //result
}

console.log( CalculateSum([10,[20,[30, 40], 50]], 60, [70,80], 90));
console.log( CalculateSum([10,20],30, [40, [50, 60]]));
console.log( CalculateSum(10,[20,30], 40, 50));
console.log( CalculateSum(10,20,30, 40));
console.log( CalculateSum(10,20));


if (!Function.prototype.bind) {
    Function.prototype.bind = function (oThis) {
        if (typeof this !== "function") {
            throw new TypeError("Function.prototype.bind - error");
        }

        var args = Array.prototype.slice.call(arguments, 1),
            funcToBind = this,
            fN = function () {},
            fB = function () {
                return funcToBind.apply(this instanceof fN && oThis
                    ? this
                    : oThis,
                    args.concat(Array.prototype.slice.call(arguments)));
            };

        fN.prototype = this.prototype;
        fB.prototype = new fN();

        return fB;
    };
}

function getElementsByAttribute(attr, value) {
    var elements = [];

    for (i=0; i<document.body.children.length; i++) {
        if (document.body.children[i].hasAttribute(attr) && document.body.children[i].getAttribute(attr) === value) {
            elements.push(document.body.children[i]);
        }
    }

    return elements;
}
