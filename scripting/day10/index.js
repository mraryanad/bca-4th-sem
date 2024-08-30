const funcWithArg = (name) => {
  return console.log("Hello " + name);
};
const funcWithoutArg = () => {
  a = 10;
  b = 11;
  return console.log(a + b);
};
const funcWithArgNoReturn = (a, b) => {
  console.log(a + b);
};
const funcWithoutArgNoReturn = () => {
  console.log("Hello World");
};

funcWithArg("Hello");
funcWithoutArg();
funcWithArgNoReturn(10, 12);
funcWithoutArgNoReturn();
