#include <iostream>
using namespace std;

const int MOD = 1000000007;

int main() {
    int i, x = 0;
    cin >> i;

    for (; i > 0; --i) {
        x = (x + (i * (i + 1) / 2) % MOD) % MOD;
    }

    cout << x << endl;
}
