#include <stdio.h>
#include <math.h>

#define e 0.001
#define f(x) (pow(x, 3) - 4*x + 1)
#define df(x) (3*x*x - 4)

int main() {
    float x0, x1, f0, f1, df0;
    int i = 0;

    // Get initial guess for the root
    printf("\nEnter the value of x0: ");
    scanf("%f", &x0);

    // Newton-Raphson method
    do {
        f0 = f(x0);
        df0 = df(x0);
        if (df0 == 0) {
            printf("Derivative is zero, unable to proceed with Newton's method.\n");
            return -1; // Exit if derivative is zero
        }
        x1 = x0 - (f0 / df0);
        f1 = f(x1);
        x0 = x1; // Update x0 for the next iteration
        i++;

        // Output the results of the iteration
        printf("Iteration: %d\t", i);
        printf("Root: %f\t", x1);
        printf("Value of function: %f\n", f1);

    } while (fabs(f1) > e); // Continue until the function value is close to zero

    return 0; // Return success
}
