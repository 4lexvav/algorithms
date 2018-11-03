#include <iostream>
using namespace std;

int main() {
    int n, m, a, b, k, max = 0;
    
    scanf("%d %d", &n, &m);

    int *numbers = new int[n] ();

    for (; m; --m) {
    	scanf("%d %d %d", &a, &b, &k);
    	--a;
    	--b;

    	for (; a <= b; ++a) {
    		numbers[a] += k;
	    	if (numbers[a] > max) {
	    		max = numbers[a];
	    	}
    	}

    	a = b = k = 0;
    }

	cout << max << endl;
}
