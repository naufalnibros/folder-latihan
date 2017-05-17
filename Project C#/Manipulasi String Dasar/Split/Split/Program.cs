using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Split
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
             * Memecah String menjadi beberapa bagian
             * berdasarkan kategori tertentu
             */
            string kalimat = "Aku Sayang Pean";
            string[] kata = kalimat.Split(' ');
            for (int i = 0; i < kata.Length; i++)
            {
                Console.WriteLine(kata[i]);
            }
        }
    }
}
