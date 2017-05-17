using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace fungsi_pangkat
{
    class Program
    {
        static int pangkatkan(int a, int p)
        {
            int hasil = 1;
            for (int i = 0; i < p; i++)
            {
                hasil = hasil * a;
            }
            return hasil;
        }
        static void Main(string[] args)
        {
            int angka, pangkat, hasil;
            Console.Write("Angka : ");
            angka = int.Parse(Console.ReadLine());
            Console.Write("Pangkat : ");
            pangkat = int.Parse(Console.ReadLine());

            hasil = pangkatkan(angka, pangkat);
            Console.WriteLine("Hasil = " + hasil);
        }
    }
}
