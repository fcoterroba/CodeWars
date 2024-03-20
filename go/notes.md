# Basic info

To execute a go file you just need to execute it with `go run nameOfFile.exe`

## Main function

This language requires a main function as `func main() {}` and a package name like `package main` at the beginning of the file

## Printing

For print text you should use `fmt.Println("your text")` but this requires to import a package as `import "fmt"`

## Functions

If you need to pass an array to a function's call, you need to create a variable first like `arr := []int{1, -4, 7, 12}` then `fmt.Println(YourFunction(arr))`

**Important** you need to declare the type of variable expected to return and the type of variable coming from the call. With `func yourFunc (numbers []int) int`, you expect:

- Recieve an array of integers with `numbers` as name
- Return a simple integer


## Foreach

A foreach in golang is using a range like `for _, element := range numbers {}` being **numbers** an array or something to loop over it. **Important**, the first parameter "_" is to get an index, if you need it just change the _ for any other name.

## Variables

Variables are created with `:=` after the name