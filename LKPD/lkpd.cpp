#include <iostream>

int main() {
    double jarak = 100.0;  // meter
    double kecepatan = 2.0;  // meter/detik

    double waktu = jarak / kecepatan;
    std::cout << "Waktu yang diperlukan: " << waktu << " detik" << std::endl;

    return 0;
};

