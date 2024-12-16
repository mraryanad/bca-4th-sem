#include<stdio.h>
#include<math.h>

#define e 0.001  // No semicolon here
#define f(x) (x*x*x - 4*x + 1)  // Function to evaluate

int main() {
    float x0, x1, x2;
    float f0, f1, f2;
    int i = 0;

    // Get initial guesses for the root
    printf("\nEnter the values of x0 and x1: ");
    scanf("%f%f", &x0, &x1);

    // Ensure the function has opposite signs at x0 and x1 for bisection method
    if (f(x0) * f(x1) >= 0) {
        printf("The bisection method cannot be applied. f(x0) and f(x1) must have opposite signs.\n");
        return 1;  // Exit if the initial guesses are not valid
    }

    // Bisection method
    do {
        f0 = f(x0);
        f1 = f(x1);
        x2 = (x0 + x1) / 2;  // Midpoint
        f2 = f(x2);

        // Check if the root is in the left or right half
        if (f0 * f2 < 0) {
            x1 = x2;  // The root lies between x0 and x2
        } else {
            x0 = x2;  // The root lies between x2 and x1
        }

        i++;  // Increment iteration counter
        printf("Iteration: %d\n", i);
        printf("Root: %f\n", x2);
        printf("Function value: %f\n", f2);

    } while (fabs(f2) > e);  // Continue until the function value is close enough to zero

    return 0;
}
