using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Program_Kelulusan
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Masukkan nilai Rapot : ");
            int nilai = int.Parse(Console.ReadLine());
            if (nilai > 60)
            {
                Console.WriteLine("Selamat Anda Lulu");
            }
            else
            {
                Console.WriteLine("Selamattt!!");
                Console.ReadLine();
                Console.WriteLine("Anda Mengulang Ujian Lagi :)");
            }
        }
    }
}
